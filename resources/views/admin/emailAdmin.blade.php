<div>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Дата</th>
            <th>Время</th>
            <th>Услуга</th>
            <th>Дата записи</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1.</td>
            <td>{{$orderlines->DateT}}</td>
            <td>{{$orderlines->Times}}</td>
            <td>{{$orderlines->services_id }}</td>
            <td>{{\Illuminate\Support\Carbon::parse($orderlines->created_at)->format('d.m.Y')}}</td>
        </tr>
        </tbody>
    </table>














</div>
