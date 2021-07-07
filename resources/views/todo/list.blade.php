@extends("layouts.app")
@section("content")
@include('layouts.notification')
        <form method="POST" action={{url('/create')}}>
        {{csrf_field()}}
            <div id="myDIV" class="header">
              <h2>My To Do List</h2>
              <input type="text" name="newTask" placeholder="Title...">
              <button type="submit" class="addBtn">Add</button>
            </div>
        </form>
        <ul id="myUL">
        @foreach($tasks as $task)
        <li>
            <div class="task">
                {{ $task['task'] }}
            </div>
            <div class="action">
                <a href={{url('/update/'.$task['id'])}}><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
            <form action="{{url('/delete/'.$task['id'])}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-success"><i class="fa fa-trash-alt"></i></button>
            </form>
            </div>
          </li>
        @endforeach
        </ul>
        </div>
@endsection
