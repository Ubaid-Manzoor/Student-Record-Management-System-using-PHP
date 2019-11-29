<?php 
    class Students extends Controller{
        /**
         * @var Student
         */
        private $studentModel;
        private $courseModel;
        private $hasError;

        public function __construct(){
            $this->studentModel = new Student();
            $this->courseModel = new Course();

            $this->hasError=false;
        }


        public function register(){
            if(!empty($_POST['register'])){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'course_name' => trim($_POST['course-name']),
                    'session' => trim($_POST['session']),
                    'first_name' => trim($_POST['first-name']),
                    'middle_name' => trim($_POST['middle-name']),
                    'last_name' => trim($_POST['last-name']),
                    'gender' => trim($_POST['gender']),
                    'guardian_name' => trim($_POST['guardian-name']),
                    'occupation' => trim($_POST['occupation']),
                    'income' => trim($_POST['income']),
                    'category' => trim($_POST['category']),
                    'disability' => trim($_POST['disability']),
                    'nationality' => trim($_POST['nationality']),

                    'course_list_err' => '',
                    'session_err' => '',
                    'first_name_err' =>'' ,
                    'middle_name_err' => '',
                    'last_name_err' => '',
                    'gender_err' => '',
                    'guardian_name_err' => '',
                    'occupation_err' => '',
                    'income_err' => '',
                    'category_err' => '',
                    'disability_err' => '',
                    'nationality_err' => ''
                ];

                // Validation
                if(empty($data['course_name'])){
//                    $data['course_list_err'] == "";
                    echo "course_name";
                    $this->hasError = true;
                }
                if(empty($data['session'])){
//                    $data['session_err'] == "";
                    echo "session";
                    $this->hasError = true;
                }
                if(empty($data['first_name'])){
//                    $data['session_err'] == "";
                    echo "first_name";
                    $this->hasError = true;
                }
                if(empty($data['middle_name'])){
//                    $data['middle_name_err'] == "";
                    echo "middle_name";
                    $this->hasError = true;
                }
                if(empty($data['last_name'])){
//                    $data['session_err'] == "";
                    echo "last_name";
                    $this->hasError = true;
                }
                if(empty($data['gender'])){
//                    $data['course_list_err'] == "";
                    echo "gender";
                    $this->hasError = true;
                }
                if(empty($data['guardian_name'])){
//                    $data['course_list_err'] == "";
                    echo "guardian_name";
                    $this->hasError = true;
                }
                if(empty($data['income'])){
//                    $data['course_list_err'] == "";
                    echo "income";
                    $this->hasError = true;
                }
                if(empty($data['occupation'])){
//                    $data['course_list_err'] == "";
                    echo "occupation";
                    $this->hasError = true;
                }

                if(!$this->hasError){
                    echo "Add to Database";
                    if($this->studentModel->add($data)){
                        $this->view('student/show');
                    }else{
                        echo "SomeThing Went Wrong";
                    }
                }else{
                    echo "Fill the Form";
                    $data = $this->courseModel->getCourses();

                    $this->view('students/register',$data);

                }
            }else{
                echo "Here";
                $data = $this->courseModel->getCourses();

                $this->view('students/register',$data);
            }
            print_r($_POST);

        }

        public function show(){
            $data = $this->studentModel->getStudents();
            $this->view('students/show', $data);
        }
    }