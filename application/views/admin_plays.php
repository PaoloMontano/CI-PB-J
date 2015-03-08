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
        {plays}
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
                <a href="/AdminPlays/edit/{id}">Edit</a> | 
                <a href="/Play/view/{id}">View</a> | 
                <a href="/AdminPlays/delete/{id}">Delete</a>
            </td>
        </tr>
        {/plays}
    </table>
    <br/>
    <a href="/AdminPlays/add" role="button" class="btn btn-default">Add Play</a>
    <a href="/Admin" role="button" class="btn btn-default">Go Back</a>
    <br/>
    <br/>
</div>