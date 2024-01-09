@extends('layout.layout')


@section('new')
    <form class="doctor" method="POST" action={{ route('save.doctor') }}>
        @csrf
        <h3>تسجيل طبيب جديد</h3>
        <div class="form-control">
            <input name="name" type="text">
            <label for="">الاسم</label>
        </div>
        <div class="form-control">
            <input name="percentage" type="text">
            <label for="">النسبه</label>
        </div>
        <div class="form-control">
            <input name="phone" type="text">
            <label for=""> الهاتف</label>
        </div>
        <div class="form-control">
            <select name="specialist">
                <option value="1">عمومي</option>
                <option value="2">اخصائي</option>
            </select>
            <label for="">التخصص</label>
        </div>
         <div class="btn-container">
                <button>حفظ</button>
         </div>
    </form>
@endsection