<?php 
ob_start();
require_once('auth.php');
include "header.php"; 

//Get the current path
$url = $_SERVER['REQUEST_URI']; 
$parts = explode('/',$url);
$currentpath = $_SERVER['SERVER_NAME'];
for ($i = 0; $i < count($parts) - 2; $i++) {
 $currentpath .= $parts[$i] . "/";
}
$schema = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
$urlpath = $schema.$currentpath;

if (isset($_REQUEST['id'])){
	$id = $_REQUEST['id'];
if (is_numeric($id) == true){
	try {
		
$custinfo =	getCustomerInfo($id);

if($custinfo['usertype'] == '1'){
	$usertype = 'Individual';
} else {
	$usertype = 'Company';
}

$compid = $custinfo['companyid'];
$companyinfo = getCompany($compid);	

?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Customer Profile - <?php echo $usertype; ?></h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Personal Information</h2>
                    <div class="clearfix"></div>					
                  </div>				  
                  <div class="x_content">
                    <br />
                    <form action="" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Full Name<span class="required">:</span>
                        </label>                        
						<div class="col-md-7 col-sm-7 col-xs-12">
							<p style="margin-top:8px"><?php echo $custinfo['fullname'] ?></p>
						</div>
                      </div>						  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email<span class="required">:</span>
                        </label>                        
						<div class="col-md-7 col-sm-7 col-xs-12">
							<p style="margin-top:8px"><?php echo $custinfo['email'] ?></p>
						</div>
                      </div>						  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phone<span class="required">:</span>
                        </label>                        
						<div class="col-md-7 col-sm-7 col-xs-12">
							<p style="margin-top:8px"><?php echo $custinfo['mobile'] ?></p>
						</div>
                      </div>
					<?php if($custinfo['usertype'] != '1'){ ?>	
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Company<span class="required">:</span>
                        </label>                        
						<div class="col-md-7 col-sm-7 col-xs-12">
							<p style="margin-top:8px"><?php echo $companyinfo['companyname']; ?></p>
						</div>
                      </div>
					<?php } ?>	
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Registered Date<span class="required">:</span>
                        </label>                        
						<div class="col-md-7 col-sm-7 col-xs-12">
							<p style="margin-top:8px"><?php echo $custinfo['date'] ?></p>
						</div>
                      </div>
                      <div cl ass="ln_solid"></div>
					  <div class="x_title">
						<h2>Bank Details</h2>
						<div class="clearfix"></div>
					  </div>
					  
					 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Name in Bank account<span class="required">:</span>
                        </label>                        
						<div class="col-md-3 col-sm-7 col-xs-12">
							<p style="margin-top:8px"><?php //echo $dealerlang =  $about_res['language'];						
							?></p>
						</div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Bank account number<span class="required">:</span>
                        </label>                        
						<div class="col-md-7 col-sm-7 col-xs-12">
							<p style="margin-top:8px"><?php //echo $dealerlang =  $about_res['language'];						
							?></p>
						</div>
                      </div>              						  
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">IBAN number<span class="required">:</span>
                        </label>                        
						<div class="col-md-7 col-sm-7 col-xs-12">
							<p style="margin-top:8px"><?php //echo $about_res['experience'] ?></p>
						</div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Swift code<span class="required">:</span>
                        </label>                        
						<div class="col-md-7 col-sm-7 col-xs-12">
							<p style="margin-top:8px"><?php //echo $about_res['experience'] ?> </p>
						</div>
                      </div>
					  <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="companytipsreceived.php" class="btn btn-primary">Back</a>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>			
          </div>
        </div>
        <!-- /page content -->
		<input type="hidden" name="designerid" id="designerid" value="<?php echo $id; ?>">
<script>
$(document).ready(function(){
	$('.stars').click(function(){
	var rating = $('.stars-count').text();	
	var designerid = $('#designerid').val();	
		$.ajax({
		url: "ratedesigner.php",
			type: "POST",
			dataType: "json",
			data: "rating="+rating+"&designerid="+designerid,
			success: function (response) {				
				console.log(response);  
				if(response!=""){
					alert('Successfully rated!');
				} /*else {
					alert('Something went wrong!');
				}*/ 
			},
		});	
	});
});	
</script>
<script>
$(document).ready(function() {
	$(".stars").starrr();

	$('.stars-existing').starrr({
	  rating: 2
	});

	$('.stars').on('starrr:change', function (e, value) {
	  $('.stars-count').html(value);
	});

	$('.stars-existing').on('starrr:change', function (e, value) {
	  $('.stars-count-existing').html(value);
	});
	$('#explevel').change(function(){
		var explevel = $('#explevel').val();	
		var designerid = $('#designerid').val();		
		$.ajax({
		url: "ratedesignerexp.php",
			type: "POST",
			dataType: "json",
			data: "explevel="+explevel+"&designerid="+designerid,
			success: function (response) {				
				console.log(response);  
				if(response!=""){
					alert('Successfully updated!');
				}  
			},
		});
	});
});
</script>
<?php include "footer.php" ?>
<script>
var slice = [].slice;

(function($, window) {
  var Starrr;
  window.Starrr = Starrr = (function() {
    Starrr.prototype.defaults = {
      rating: <?php echo $rating; ?>,
      max: 5,
      readOnly: false,
      emptyClass: 'fa fa-star-o',
      fullClass: 'fa fa-star',
      change: function(e, value) {}
    };

    function Starrr($el, options) {
      this.options = $.extend({}, this.defaults, options);
      this.$el = $el;
      this.createStars();
      this.syncRating();
      if (this.options.readOnly) {
        return;
      }
      this.$el.on('mouseover.starrr', 'a', (function(_this) {
        return function(e) {
          return _this.syncRating(_this.getStars().index(e.currentTarget) + 1);
        };
      })(this));
      this.$el.on('mouseout.starrr', (function(_this) {
        return function() {
          return _this.syncRating();
        };
      })(this));
      this.$el.on('click.starrr', 'a', (function(_this) {
        return function(e) {
          e.preventDefault();
          return _this.setRating(_this.getStars().index(e.currentTarget) + 1);
        };
      })(this));
      this.$el.on('starrr:change', this.options.change);
    }

    Starrr.prototype.getStars = function() {
      return this.$el.find('a');
    };

    Starrr.prototype.createStars = function() {
      var j, ref, results;
      results = [];
      for (j = 1, ref = this.options.max; 1 <= ref ? j <= ref : j >= ref; 1 <= ref ? j++ : j--) {
        results.push(this.$el.append("<a href='#' />"));
      }
      return results;
    };

    Starrr.prototype.setRating = function(rating) {
      if (this.options.rating === rating) {
        rating = void 0;
      }
      this.options.rating = rating;
      this.syncRating();
      return this.$el.trigger('starrr:change', rating);
    };

    Starrr.prototype.getRating = function() {
      return this.options.rating;
    };

    Starrr.prototype.syncRating = function(rating) {
      var $stars, i, j, ref, results;
      rating || (rating = this.options.rating);
      $stars = this.getStars();
      results = [];
      for (i = j = 1, ref = this.options.max; 1 <= ref ? j <= ref : j >= ref; i = 1 <= ref ? ++j : --j) {
        results.push($stars.eq(i - 1).removeClass(rating >= i ? this.options.emptyClass : this.options.fullClass).addClass(rating >= i ? this.options.fullClass : this.options.emptyClass));
      }
      return results;
    };

    return Starrr;

  })();
  return $.fn.extend({
    starrr: function() {
      var args, option;
      option = arguments[0], args = 2 <= arguments.length ? slice.call(arguments, 1) : [];
      return this.each(function() {
        var data;
        data = $(this).data('starrr');
        if (!data) {
          $(this).data('starrr', (data = new Starrr($(this), option)));
        }
        if (typeof option === 'string') {
          return data[option].apply(data, args);
        }
      });
    }
  });
})(window.jQuery, window);

</script>
<?php } catch(PDOException $e){		  
		error_log('PDOException - ' . $e->getMessage(), 0);		  
		http_response_code(500);
		die('Error establishing connection with database');
	} 
		} else {    
		http_response_code(400);
		die('Error processing bad or malformed request');
   }
}
?>
