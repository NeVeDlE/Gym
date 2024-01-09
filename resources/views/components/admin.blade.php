@props(['users','search'])
<div>
    <h2>لوحة التحكم</h2>


    <div>
        <form action="/" method="get">
            @csrf
            <input name="search" value="{{$search}}" style="border: 1px" id="search"
                   placeholder="      Search" type="search" autocomplete="off">
            <button type="submit">Search</button>
        </form>
        <a href="/coaches" style="color: #1a202c">لوحة التحكم ف الكوتشات</a>
        <table>
            <tr>
                <th>المشترك</th>
                <th>النوع</th>
                <th>الترقيه ل كوتش</th>
                <th>تفعيل/الغاء</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>
                        @if($user->role_id!=2)
                    <form action="/coaches/{{$user->id}}/promote" method="post">
                        @csrf
                        <button type="submit" style="color:slateblue">خليه ل كوتش</button>
                    </form>
                        @else
                            كوتش
                        @endif
                    </td>
                    <td>

                        @if($user->membership->active==0)
                            <form action="/membership/{{$user->membership->id}}/activate" method="post">
                                @csrf
                                <input hidden="hidden" name="id" value="{{$user->membership->id}}">
                                <button type="submit" style="color: green">تفعيل</button>
                            </form>
                        @else
                            <form action="/membership/{{$user->membership->id}}/deactivate" method="post">
                                @csrf
                                <input hidden="hidden" name="id" value="{{$user->membership->id}}">
                                <button type="submit" style="color: red">الغاء</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach

        </table>
        {{$users->links()}}
    </div>

</div>
