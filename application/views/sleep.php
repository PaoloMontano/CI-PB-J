<div class="container" id="searchnav">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            Sort by Highest: 
            <a href="/Sleep/sortHValue" role="button" class="btn btn-default">Value</a>
            <a href="/Sleep/sortHRating" role="button" class="btn btn-default">Rating</a>
        </div>
        <div class="col-md-6 col-xs-12">
            Sort by Lowest: 
            <a href="/Sleep/sortLValue" role="button" class="btn btn-default">Value</a>
            <a href="/Sleep/sortLRating" role="button" class="btn btn-default">Rating</a>
        </div>
    </div>
</div>

<div class="container" id="content">
    <div id="sleep">
        <table class="results">
        {sleeps}
            <tr>
                <td class="results-image"><img src="/assets/images/{image}" alt="pic" width="100" height="100"></td>
                <td class="results-description">
                    <h3>{title}</h3>{desc}<a href="/Sleep/view/{id}"> Learn more.</a>
                </td>
                <td class="results-rating" width="100">
                    Value: {value}
                    Rating: {rating}
                </td>
            </tr>
        {/sleeps}
        </table>
    </div>
</div>