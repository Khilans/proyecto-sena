<?php
include_once '../model/Foro/ForoModel.php';
    class ForoController{
        
        public function post(){
            $obj= new ForoModel;
            $foro_id=$_POST['foro_id'];
            $sql="SELECT * FROM t_foro WHERE cod_foro=$foro_id";
            $foro=$obj->consult($sql);
            include_once '../view/ForoJhan/post.php';
        }

        public function sendPost(){
            
        }

        public function sendComment(){

        }

        public function edit(){

        }

        public function delete(){

        }

        public function feed(){
            $obj= new ForoModel;
            $sql="SELECT * FROM t_foro ";
            $posts=$obj->consult($sql);
            include_once '../view/ForoJhan/feed.php';
        }
    }