<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class ReportController extends Controller {

        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function ___construct () {
            $this->middleware('auth');
        }

        /**
         * Show the report
         *
         * @return \Illuminate\Contracts\Support\Renderable
         */
        public function index () {
            return view('report');
        }
    }
?>