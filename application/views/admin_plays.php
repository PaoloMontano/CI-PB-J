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
                <a href="/adminplays/edit/{id}">Edit</a> | 
                <a href="/adminplays/delete/{id}">Delete</a>
            </td>
        </tr>
        {/plays}
    </table>
</div>
<br/>
<a href="/adminplays/add">Add Play</a>
<br/>
<a href="/admin">Go back</a>