<?php 

    class Courses extends Controller{
        public function __construct(){
            $this->courseModel = new Course();
        }

        public function add(){
            if(!empty($_POST['submit'])){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'short_name' => trim($_POST['cshort']),
                    'full_name' => trim($_POST['cfull']),
                    'created_at' => $_POST['creation_date'],
                    'cshort_err' => '',
                    'cfull_err' => ''
                ];


                // Validation 
                if(empty($data['cshort'])){
                    $data['short_name'] == "Fill the Name";
                }
                if(empty($data['cfull'])){
                    $data['full_name'] == "Fill the Name";
                }

                if(!empty($data['short_name']) && !empty($data['full_name'])){
                    echo "Add to Database";
                    if($this->courseModel->add($data)){
                        $this->view('courses/add');
                    }else{
                        echo "SomeThing Went Wrong";
                    }

                    
                }else{
                    echo "Fill the Form";
                    $this->view('courses/add', $data);
                }
            }else{
                $this->view('courses/add');
            }
        }

        public function show(){
            $this->view('courses/show');
        }
    }