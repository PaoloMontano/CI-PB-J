<div class="container" id="searchnav">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            Sort by Highest: 
            <a href="/Eat/sortHValue" role="button" class="btn btn-default">Value</a>
            <a href="/Eat/sortHRating" role="button" class="btn btn-default">Rating</a>
        </div>
        <div class="col-md-6 col-xs-12">
            Sort by Lowest: 
            <a href="/Eat/sortLValue" role="button" class="btn btn-default">Value</a>
            <a href="/Eat/sortLRating" role="button" class="btn btn-default">Rating</a>
        </div>
    </div>
</div>

<div class="container" id="content">
    <div id="eat">
        <table class="results">
        {eats}
            <tr>
                <td class="results-image"><img src="/assets/images/{image}" alt="pic" width="100" height="100"></td>
                <td class="results-description">
                    <h4>{title}</h4>{desc}<a href="/Eat/view/{id}"> Learn more.</a>
                </td>
                <td class="results-rating" width="100">
                    Value: {value}
                    Rating: {rating}
                </td>
            </tr>
        {/eats}
        </table>
    </div>
</div>