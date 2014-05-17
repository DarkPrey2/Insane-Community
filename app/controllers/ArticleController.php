<?php
    
    class ArticleController extends BaseController{


        public function index()
        {
            return View::make('article.article');
        }

        public function show()
        {
           return View::make('article.show');
        }

        public function edit($id)
        {
            return View::make('article.edit');
        }


         public function create()
    {
        
    if(Request::isMethod('POST'))
        {
            $art_name = Input::get('article_name');
            $art_desc = Input::get('article_desc');
            $art = Input::get('article');
            $link = Input::get('link');


            $validator = Validator::make(

                array(
                    'article_name' => $art_name,
                    'article_desc' => $art_desc,
                    'article' => $art,
                    'link' => $link
                    ),
                array(
                    'article_name' => 'required',
                    'article_desc' => 'required',
                    'article' => 'requierd',
                    'video' => null,
                    'updated_at' => null,
                    'created_at' => null
                    )
                );

            $art_save = new Article;

            $art_save->article_name = $art_name;
            $art_save->article_desc = $art_desc;
            $art_save->article = $art;
            $art_save->link = $link;
            $art_save->save();

            return Redirect::to('/compte')->with('message', 'Articles enregistré avec succes ?');
        }
        return View::make('article.article');
    }


    }

?> 