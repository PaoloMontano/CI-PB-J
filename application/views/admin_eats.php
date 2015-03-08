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
        {eats}
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
                <a href="/AdminEats/edit/{id}">Edit</a> | 
                <a href="/Eat/view/{id}">View</a> | 
                <a href="/AdminEats/delete/{id}">Delete</a>
            </td>
        </tr>
        {/eats}
    </table>
    <br/>
    <a href="/AdminEats/add" role="button" class="btn btn-default">Add Eat</a>
    <a href="/admin" role="button" class="btn btn-default">Go Back</a>
    <br/>
    <br/>
</div>