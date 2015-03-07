<div class="container" id="content">
    <table class="results, manage">
        <tr>
            <th>ID</th>
            <th>Phone</th>
            <th>Name</th>
            <th>Image</th>
            <th>Value</th>
            <th>Rating</th>
            <th>Manage</th>
        </tr>
        {sleeps}
        <tr>
            <td>{id}</td>
            <td>{phoneId}</td>
            <td>{title}</td>
            <td>
                <img src="/assets/images/{image}" alt="pic">
            </td>
            <td>{value}</td>
            <td>{rating}</td>
            <td>
                <a href="/AdminSleeps/edit/{id}">Edit</a> | 
                <a href="/AdminSleeps/delete/{id}">Delete</a>
            </td>
        </tr>
        {/sleeps}
    </table>
</div>
<br/>
<a href="/AdminSleeps/add" role="button" class="btn btn-default">Add Sleep</a>
<a href="/admin" role="button" class="btn btn-default">Go Back</a>