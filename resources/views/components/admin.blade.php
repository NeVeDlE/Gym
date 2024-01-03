@props(['users'])
<div>
    <h2>لوحة التحكم</h2>

    <table>
        <tr>
            <th>المشترك</th>
            <th>تفعيل/الغاء</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>

                @if($user->membership->active==0)
                    <form action="/membership/{{$user->membership->id}}/activate" method="post">
                        @csrf
                        <input hidden="hidden" name="id" value="{{$user->membership->id}}">
                        <button  type="submit" style="color: green">تفعيل</button>
                    </form>
                @else
                    <form action="/membership/{{$user->membership->id}}/deactivate" method="post">
                        @csrf
                        <input hidden="hidden" name="id" value="{{$user->membership->id}}">
                        <button  type="submit" style="color: red">الغاء</button>
                    </form>
                @endif
            </td>
        </tr>
        @endforeach

    </table>
    {{$users->links()}}
</div>
