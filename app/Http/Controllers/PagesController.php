<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $users = Employee::all(); // ดึงข้อมูลพนักงานทั้งหมดจากฐานข้อมูล
        return view('index', compact('users'));
    }
    public function create()
    {
        #ไปยังหน้า create
        return view('create');
    }
    public function inputdata(Request $request)
    {

        // ตรวจสอบข้อมูล
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'schoolname' => 'required|string|max:255',
        ]);
        // การเพิ่มข้อมูลลงฐานข้อมูล
        $employee = new Employee;
        $employee->name = $request->input('name');
        $employee->age = $request->input('age');
        $employee->schoolname = $request->input('schoolname');
        $employee->save();
         // // Redirect กลับไปพร้อมข้อความแจ้งเตือน
        return redirect()->route('create')->with('success', 'เพิ่มข้อมูลเรียบร้อยเเล้ว');
    }
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'typename' => 'required',
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'schoolname' => 'required|string|max:255',
        ]);

        $employee = Employee::findOrFail($id); // หาค่าที่ต้องการแก้ไข

        $employee->typename = $request->input('typename');
        $employee->name = $request->input('name');
        $employee->age = $request->input('age');
        $employee->schoolname = $request->input('schoolname');
        $employee->save();

        return redirect()->route('index')->with('success', 'แก้ไขข้อมูลเรียบร้อยแล้ว');
    }
    public function delete($id)
    {
        $employee = Employee::find($id);

        if (!$employee) {
            // ไม่พบข้อมูล ไม่ทำอะไรแล้วกลับไปหน้า index
            return redirect()->route('index')->with('error', 'ไม่พบข้อมูลที่ต้องการลบ');
        }

        $employee->delete();

        // ตรวจสอบว่ามีข้อมูลเหลืออยู่หรือไม่
        if (Employee::count() == 0) {
            return redirect()->route('index')->with('success', 'ลบข้อมูลทั้งหมดเรียบร้อยแล้ว');
        }

        return redirect()->route('index')->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }

    // public function delete(Request $request)
    // {
    //     $id = $request->input('id');
    //     // ตรวจสอบว่ามีข้อมูลเหลืออยู่หรือไม่
    //     if (Employee::count() == 0) {
    //         return redirect()->route('index')->with('success', 'ลบข้อมูลทั้งหมดเรียบร้อยแล้ว');
    //     }

    //     return redirect()->route('index')->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    // }
}
