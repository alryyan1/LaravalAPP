@extends('layout.layout')


@section('new')
    <form class="doctor" method="POST" action={{ route('new.specialist') }}>
        @csrf
        <h3>تسجيل تخصص جديد</h3>
        <div class="form-control">
            <input name="name" type="text">
            <label for="">الاسم</label>
        </div>
        
         <div class="btn-container">
                <button>حفظ</button>
         </div>
    </form>
@endsection