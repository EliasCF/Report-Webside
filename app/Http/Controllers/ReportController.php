<?php
    namespace App\Http\Controllers;

    use App\Exports\ExcelExport;
    use Maatwebsite\Excel\Facades\Excel;
    use Illuminate\Support\Facades\Auth;

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

        /**
         * Downloads excel report
         *
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
         */
        public function excel () {
            return Excel::download(new ExcelExport(), Auth::User()->name . ' report.xlsx');
        }
    }
?>