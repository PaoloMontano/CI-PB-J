<div class="container" id="searchnav">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            Sort by Highest: 
            <a href="/Play/sortHValue" role="button" class="btn btn-default">Value</a>
            <a href="/Play/sortHRating" role="button" class="btn btn-default">Rating</a>
        </div>
        <div class="col-md-6 col-xs-12">
            Sort by Lowest: 
            <a href="/Play/sortLValue" role="button" class="btn btn-default">Value</a>
            <a href="/Play/sortLRating" role="button" class="btn btn-default">Rating</a>
        </div>
    </div>
</div>

<div class="container" id="content">
    <div id="play">
        <table class="results">
        {plays}
            <tr>
                <td class="results-image"><img src="/assets/images/{image}" alt="pic" width="100" height="100"></td>
                <td class="results-description">
                    <h3>{title}</h3>{desc}<a href="/Play/view/{id}"> Learn more.</a>
                </td>
                <td class="results-rating" width="100">
                    Value: {value}
                    Rating: {rating}
                </td>
            </tr>
        {/plays}
        </table>
    </div>
</div>