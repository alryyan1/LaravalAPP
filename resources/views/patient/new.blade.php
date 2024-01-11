@extends('layout.layout')


@section('new')
    <form class="doctor" method="POST" action={{ route('save.patient') }}>
        @csrf
        <h3>تسجيل مريض جديد</h3>
        <div class="form-control">
            <input name="name" type="text">
            <label for="">الاسم</label>
        </div>
        <div class="form-control">
            <select name="doctor">
                @foreach ($doctors as $doctor)
                    <option value={{$doctor->id}}>{{$doctor->name}}</option> 
                @endforeach
            </select>
            <label for="">الطبيب</label>
        </div>
        <div class="form-control">
            <input name="phone" type="text">
            <label for=""> الهاتف</label>
        </div>
        <div class="form-control">
            <input name="age" type="text">
            <label for=""> العمر</label>
        </div>
        <div class="form-control">
            <input name="address" type="text">
            <label for=""> العنوان</label>
        </div>
      
         <div class="btn-container">
                <button>حفظ</button>
         </div>
    </form>
@endsection