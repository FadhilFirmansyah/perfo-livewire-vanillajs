<div>
    <table border="1">
        <th>ID</th>
        <th>Name</th>
        <th>Status</th>
        <th>Description</th>
        <th>Gender</th>
        <th>Age</th>
        <th>GPA</th>
        <th>Birth Date</th>
        @foreach ($migrations as $migration)
            <tr>
                <td>{{ $migration->uuid }}</td>
                <td>{{ $migration->name }}</td>
                <td>{{ $migration->status }}</td>
                <td>{{ $migration->description }}</td>
                <td>{{ $migration->gender }}</td>
                <td>{{ $migration->age }}</td>
                <td>{{ $migration->gpa }}</td>
                <td>{{ $migration->birth_date }}</td>
            </tr>
        @endforeach
    </table>

    <div>
        {{ $migrations->links() }}
    </div>
</div>
