<?php 

    class Subjects extends Controller{
        public function __construct(){
            $this->courseModel = new Course();
            $this->subjectModel = new Subject();
        }

        public function add(){
            if(isset($_POST['submit'])){
                print_r($_POST);
                $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

                $data = [
                    'short_name' => trim($_POST['short_name']),
                    'full_name' => trim($_POST['full_name']),
                    'sub1' => trim($_POST['sub1']),
                    'sub2' => trim($_POST['sub2']),
                    'sub3' => trim($_POST['sub3']),
                    'short_name_err' => "",
                    'full_name_err' => "",
                    'sub1_err' => "",
                    'sub2_err' => "Fill Subject2",
                    'sub3_err' => "Fill Subject3"
                ];

                $isempty = False;
                if(empty($_POST['short_name'])){
                    $data['short_name_err'] = "Fill the Short Name";
                    $isempty = True;
                }
                if(empty($_POST['short_name'])){
                    $data['full_name_err'] = "Fill the Short Name";
                    $isempty = True;                
                }
                if(empty($_POST['short_name'])){
                    $data['sub1_err'] = "Fill Subject1";
                    $isempty = True;                
                }
                if(empty($_POST['short_name'])){
                    $data['sub2_err'] = "Fill Subject2";
                    $isempty = True;                
                }
                if(empty($_POST['short_name'])){
                    $data['sub3_err'] = "Fill Subject3";
                    $isempty = True;                
                }

                if(!$isempty){
                    echo "Add Database";
                    $this->subjectModel->add($data);
                }else{
                    echo "Fill all the Inputs";
                }

                
            }else{
                echo "Not submitted";
            }
            $courses = $this->courseModel->getCourses();
            $this->view('subjects/add', $courses);
        }

        public function show(){
            $subjects = $this->subjectModel->getSubjects();
            
            $this->view('subjects/show',$subjects);
        }
    }