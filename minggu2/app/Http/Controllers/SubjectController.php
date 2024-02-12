<?php

namespace App\Http\Controllers;

use App\Models\S_StudentModel;
use App\Models\S_TeacherModel;
use App\Models\S_AdminModel;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function viewStudentSubject()
    {
        // Mengambil semua data dari model S_StudentModel
        $data = S_StudentModel::all();
        // Mengirim data ke view 'Sv_Student'
        return view('Sv_Student', ['data' => $data]);
    }

    public function viewTeacherSubject()
    {
        // Mengambil semua data dari model S_TeacherModel
        $data = S_TeacherModel::all();
        // Mengirim data ke view 'Sv_Teacher'
        return view('Sv_Teacher', ['data' => $data]);
    }

    public function viewAdminSubject()
    {
        // Mengambil semua data dari model S_TAdminModel
        $data = S_AdminModel::all();
        // Mengirim data ke view 'Sv_Admin'
        return view('Sv_Admin', ['data' => $data]);
    }
}
