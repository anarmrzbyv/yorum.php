<?php
include_once 'crud.php';
include_once 'paginator.php';

class moviescontroller
{
    private $crud;

    public $pagination_links;

    public function __construct()
    {
        $this->crud = new crud();
    }

    public function addmovie()
    {
        $movie_data = [
            'mv_title' => $_POST['mv_title'],
            'mv_year_released' => $_POST['mv_year_released']
        ];
        $movie_id = $this->crud->create($movie_data, 'movies');
        $movie_genres = isset($_POST['genres']) ? $_POST['genres'] : [];
        $this->createMovisegenres($movie_genres, $movie_id);
        $this->saveAndUploadCoverimage($movie_id);

        session::set('success-message', 'Movie Added Successfully');

        header('Location:list-movies.php');
    }

    public function editMovie($movie_id)
    {
        $yeae_released = $_POST['mv_year_released'];
        $mv_title = $_POST['mv_title'];

        $sql = "update movies set mv_year_released ='$yeae_released',mv_title ='$mv_title'where mv_id=$movie_id";

        $this->crud->update($sql);


        // if this genre is desekected from the select box remove it from the database
        $this->deleteDeselectedgenres($movie_id);


        $this->createMovisegenres($_POST['genres'], $movie_id);
        //update movie  image
        if (!empty($_FILES['cover_image']['name'])) {
            //delete previous image
            $this->crud->delete("delete from images where img_ref_movie=$movie_id");
            $this->saveAndUploadCoverimage($movie_id);

        }
        session::set('success-message', 'Movie Added Successfully');

        header('Location:list-movies.php');
    }

    public function deleteDeselectedgenres($movie_id)
    {
        $this->crud->delete("delete from mv_genres where mvg_ref_movie =$movie_id");
    }

    public function deletMovie($movie_id)
    {
        $this->crud->delete("DELETE FROM movies WHERE mv_id=$movie_id");
        session::set('success-message', 'Movie deleted successfully');
//        header("Location :../admin/list-movies.php");

    }

    public function createMovisegenres($movie_genres, $movie_id)
    {
        foreach ($movie_genres as $key => $genre_id) {

            $movie_genres_arr = [
                'mvg_ref_genre' => $genre_id,
                'mvg_ref_movie' => $movie_id
            ];
            $this->crud->create($movie_genres_arr, 'mv_genres');
        }
    }

    public function getMovies()
    {
        $query = "SELECT mv_id,mv_title,img_path,gnr_name,GROUP_CONCAT(gnr_name)genres,mv_year_released FROM `movies` 
                        LEFT JOIN mv_genres ON mvg_ref_movie=mv_id
                            LEFT JOIN genres ON mvg_ref_genre=gnr_id
                                 LEFT JOIN  images  ON img_ref_movie=mv_id                                        
                                GROUP BY mv_id
                                ORDER BY mv_id DESC ";


        $rows_found = count($this->crud->read($query));

        $pagination = new paginator($rows_found, 2);

        $offset_and_limit = $pagination->get_offset_and_limit();
        $query .= " " . $offset_and_limit;

        $result= $this->crud->read($query);

        $this->pagination_links = $pagination->get_pagination_links();
          return $result;
    }

    public function getMovie($mv_id)
    {
        $query = "SELECT mv_id,mv_title,img_path,gnr_name,GROUP_CONCAT(gnr_name)genres,mv_year_released FROM `movies` 
                        LEFT JOIN mv_genres ON mvg_ref_movie=mv_id
                            LEFT JOIN genres ON mvg_ref_genre=gnr_id
                                 LEFT JOIN  images  ON img_ref_movie=mv_id    
                                 WHERE mv_id=$mv_id                                                     
                                GROUP BY mv_id
                                ORDER BY mv_id DESC ";

        return $this->crud->read($query);
    }

    public function saveAndUploadCoverimage($movie_id)
    {

        $dir = "../images/new_covers/movie_$movie_id";
        if (!file_exists($dir)) {
            mkdir($dir, 0755, true);
        }
        $dir = $dir . "/" . basename($_FILES['cover_image']['name']);
        move_uploaded_file($_FILES['cover_image']['tmp_name'], $dir);
        $image_info = [
            'img_path' => str_replace('../', '', $dir),
            'img_ref_movie' => $movie_id
        ];

        $this->crud->create($image_info, 'images');
    }

}
