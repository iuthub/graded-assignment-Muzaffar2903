@extends("layouts.app")
@section("content")
@include('layouts.notification')
<form method="POST" action="{{url('/update/'.$task['id'])}}">
{{csrf_field()}}
{{ method_field('PUT') }}
<div  class="header">
              <h2>Update To Do List</h2>
              <input type="text" name="newTask" value={{ $task->task }}>
              <button type="submit" class="addBtn">Update</button>
            </div>
</form>
@endsection
