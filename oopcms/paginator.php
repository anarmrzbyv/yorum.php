<?php

///seyfeleme
class paginator
{
    private $request_url;
    private $per_page;//limit or the number of results to display pre page
    private $page;//the current page

    //culcuated based on the number of rows found the nimber of rows to
    //display pre page :$rows_found/$pre_page (number of results to display pre page )
    private $last_page;
    /*
      will be generated using a for loop
        while ($i<$last){ 1 2 3 }
               <a href="path_to_you_script.php&page=1" >1</a>
              <a href="path_to_you_script.php&page=2" >2</a>
              <a href="path_to_you_script.php&page=3" >3</a>
    */
    private $row_found;
    private $pagination_links;

    public function __construct($row_found, $per_page)
    {
        $this->row_found = $row_found;
        $this->per_page = $per_page;
        $this->last_page = ceil($row_found / $per_page);
        $this->page = isset($_GET['page']) ? $_GET['page'] : 1;
        $this->request_url = $this->get_request_path();
    }

    public function get_request_path()
    {
        return parse_url($_SERVER['REQUEST_URI'])['path'];
    }

    public function create_paginaton_links()
    {
        for ($page = 1; $page <= $this->last_page; $page++) {
            $is_link_active = '';
            if ($this->page == $page) {
                $is_link_active = 'active';
            }
            $query_strings = $this->get_query_strings();

            $request_url = $this->get_request_path() . '?' . http_build_query($query_strings);

            $this->pagination_links .= $this->create_html_for_pagination_links($page, $request_url, $page, $is_link_active);
        }

    }

    public function create_html_for_pagination_links($page_number, $request_url, $page_value, $is_link_active = '')
    {
        $this->pagination_links .=
            " <li class='" . $is_link_active . "page-item'> 
                        <a class='page-link' href='$request_url & page=$page_number'class='page-link'> $page_value </a>
                 </li> ";
    }

    public function get_query_strings()
    {
        parse_str($_SERVER['QUERY_STRING'], $query_strings);
        return $query_strings;
    }

    public function create_previous()
    {
        if ($this->page > 1) {
            $previous_page = $this->page - 1;
            $queru_strings = $this->get_query_strings();
            unset($queru_strings['page']);
            $request_url = $this->get_request_path() . '?' . http_build_query($queru_strings);
            $this->pagination_links .= $this->create_html_for_pagination_links($previous_page, $request_url, 'pervious');
        }
    }

    public function create_next()
    {
        if ($this->last_page != 1) {

            if ($this->page != $this->last_page) {

                $next_page = $this->page + 1;
                $queru_strings = $this->get_query_strings();
                unset($queru_strings['page']);
                $request_url = $this->get_request_path() . '?' . http_build_query($queru_strings);
                $this->pagination_links .= $this->create_html_for_pagination_links($next_page, $request_url, 'next');

            }
        }
    }

    public function get_pagination_links()
    {
        $this->create_previous();
        $this->create_paginaton_links();
        $this->create_next();

        return $this->pagination_links;
    }

    public function get_offset_and_limit()
    {
        return "limit " . ($this->page - 1) * $this->per_page . "," . $this->per_page;
    }

}