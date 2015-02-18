<div class="container" id="searchnav">
    <form class="form-inline row text-center" role="form" action="">
        <div class="form-group col-md-3">
            <label for="searchnav-rating">Rating:</label>
            <img src="/assets/images/stars.png" alt="" width="100"/>
        </div>
        <div class="form-group col-md-3">
            <label for="searchnav-value">Value:</label>
            <img src="/assets/images/stars.png" alt="" width="100"/>
        </div>
        <div class="form-group col-md-6">
            <label for="searchnav-searchbox">Search:</label>
            <input class="form-control" id="searchnav-searchbox" type="text"/>
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </form>
</div>

<div class="container" id="content">
    <div id="eat">
        <table class="results">
        {eats}
            <tr>
                <td class="results-image"><img src="/assets/images/{pic}" alt="pic" width="100" height="100"></td>
                <td class="results-description">
                    <h3>{name}</h3>{description}<a href="{link}">Learn more.</a>
                </td>
                <td class="results-rating">
                    Rating: <img src="/assets/images/stars.png" alt="stars" width="100px"/>
                    <br/>
                    Value: <img src="/assets/images/stars.png" alt="stars" width="100px"/>
                </td>
            </tr>
        {/eats}
        </table>
    </div>
</div>