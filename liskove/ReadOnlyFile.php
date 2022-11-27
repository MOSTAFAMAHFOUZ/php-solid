<?php 





class File{

    public function read(){
        echo "read from file";
    }


    public function write(){
        throw new Exception("you can not write into file");
    }
}