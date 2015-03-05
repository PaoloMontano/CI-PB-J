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
                <a href="/admineats/edit/{id}">Edit</a> | 
                <a href="/admineats/delete/{id}">Delete</a>
            </td>
        </tr>
        {/eats}
    </table>
</div>
<br/>
<a href="/admineats/add">Add Eat</a>
<br/>
<a href="/admin">Go back</a>