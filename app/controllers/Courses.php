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
                if(empty($data['short_name'])){
                    $data['short_name_err'] == "Fill the Name";
                }
                if(empty($data['full_name'])){
                    $data['full_name_err'] == "Fill the Name";
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
            $data = $this->courseModel->getCourses();
            $this->view('courses/show', $data);

        }

        public function edit($id){
            if(!empty($_POST['submit'])){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'short_name' => trim($_POST['cshort']),
                    'full_name' => trim($_POST['cfull']),
                    'id' => $id,
                    'short_name_err' => '',
                    'full_name_err' => ''
                ];

                $isempty = false;
                if(empty($data['short_name'])){
                    $data['short_name_err'] = "Fill The Short Name";
                    $isempty = true;
                }
                if(empty($data['full_name'])){
                    $data['full_name_err'] = "Fill the Full Name";
                }

                if(!$isempty){
                    if(!$this->courseModel->update($data)){
                        echo "Something Went Wrong";
                    }
                }else{
                    echo "Fill The Form";
                }
                header("Location: " . URLROOT . "/courses/show");
            }else{
                $data = $this->courseModel->getCourse($id);
                $this->view('courses/edit' , $data);
            }
        }

        public function delete($id){
            $this->courseModel->delete($id);

            header('Location: '. URLROOT . '/courses/show');
        }
    }