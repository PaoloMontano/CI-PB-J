<div class="container" id="content">
    
    <h1>{title}</h1>
    <a style="padding-left: 10px;" href="{link}" target="_blank">{link}</a>
    <br/><br/>
    
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <img src="/assets/images/{image}" alt="" class="view-image"/>
        </div>
        <div class="col-md-8 col-xs-12">
            <b>Phone:</b> {phoneId} <br/>
            <b>Value:</b> {value} <br/>
            <b>Rating:</b> {rating} <br/><br/>
            {desc}
        </div>
    </div>
    
    <br/>
    <a onclick="goBack()" role="button" class="btn btn-default back">Go Back</a>
    <a href="{link}" role="button" class="btn btn-success">Visit</a>
    <br/>
    <br/>
    
</div>