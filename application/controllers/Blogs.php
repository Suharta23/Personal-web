<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blogs extends CI_Controller
{
    private $api;
    public function index()
    {
        $this->load->helper('api');
        // check if there is a query string
        $page       = $this->input->get('page');
        $category   = $this->input->get('category');
        $type       = $this->input->get('type');
        $keyword    = $this->input->get('keyword');

        if (empty($page) && empty($this->input->get('category')) && empty($this->input->get('type'))) {
            $response = getData(envStrapi() . '/api/articles');
        }

        if (!empty($page)) {
            $response = getData(envStrapi() . '/api/articles/page/' . $page);
        }

        if (!empty($category)) {
            $response = getData(envStrapi() . '/api/articles/category/' . $category . '?page=' . $page);
        }

        if (!empty($type)) {
            $response = getData(envStrapi() . '/api/articles/types/' . $type . '?page=' . $page);
        }

        if (!empty($keyword)) {
            $response = $this->api->postData(envStrapi() . 'api/articles/search', [
                'keyword' => $keyword
            ]);
        }

        // categories
        $categories = getData(envStrapi() . '/api/categories') ?? [];
        // types
        $types = getData(envStrapi() . '/api/types') ?? [];
        //lates post
        $latesPost = getData(envStrapi() . '/api/articles/latest/page?limit=3') ?? [];

        $total = $response["data"]["attributes"]["pagination"]["total"];
        $limit = $response["data"]["attributes"]["pagination"]["pageSize"];
        $page  = $response["data"]["attributes"]["pagination"]["page"] ?? 1;
        $totalPage = ceil($total / $limit);
        // create pagination
        $pagination = [];
        for ($i = 1; $i <= $totalPage; $i++) {
            $pagination[] = [
                'page' => $i,
                'active' => $page == $i ? 'active' : ''
            ];
        }

        $data = [
            'title' => 'Home',
            'base_url' => "http://107.155.65.135:1340",
            'data' => $response,
            'categories' => $categories,
            'types' => $types,
            'latesPost' => $latesPost,
            'pagination' => $pagination
        ];
        $this->template->load('layouts/page_layout', 'blogs', $data);
    }

    public function detail($slug)
    {
        $this->load->helper('api');
        $response = getData(envStrapi() . '/api/articles/' . $slug);
        if ($response['data'] == null || $response['data']['results'] == null) {
            return $this->load->view('404');
        }
        // categories
        $categories = getData(envStrapi() . '/api/categories') ?? [];
        // types
        $types = getData(envStrapi() . '/api/types') ?? [];
        //lates post
        $latesPost = getData(envStrapi() . '/api/articles/latest/page?limit=3') ?? [];
        $data = [
            'title' => 'Home',
            'base_url' => "http://107.155.65.135:1340",
            'data' => $response,
            'categories' => $categories,
            'types' => $types,
            'latesPost' => $latesPost
        ];
        $this->template->load('layouts/page_layout', 'blog', $data);
    }
}
