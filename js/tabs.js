// document ready function
$(function() {

	// Sets default tab to the first tab
	// http://stackoverflow.com/questions/4565128/set-default-tab-in-jquery-ui-tabs
    $( "#tabs" ).tabs();
    $( "#tabs" ).tabs( "option", "active", 0 );
                
	// Goes to the next tab if user clicks the next button
	// http://stackoverflow.com/questions/3044654/jquery-tabs-next-button
    $("#next").click(function() {
    	// Gets active tab
        var active = ($( "#tabs" ).tabs( "option", "active" ));
        // Changes hint to be hint of next section
        hint(active);
        // Move to next tab
        $( "#tabs" ).tabs( "option", "active", active + 1 );
    }); // end next
                  
	// Goes to the previous tab if user clicks the previous button
	// http://stackoverflow.com/questions/3044654/jquery-tabs-next-button         
    $("#previous").click(function() {
    	// Gets active tab
        var active = $( "#tabs" ).tabs( "option", "active" );
        // Changes hint to be hint of next section
        hint(active-2);
        // Moves to previous tab, but will not loop through all tabs
        if (active-1>=0){
            $( "#tabs" ).tabs( "option", "active", active - 1 );
        }
    }); // end previous
    
    // Upon save, change the current tab's style
    // http://stackoverflow.com/questions/7986086/using-a-jquery-variable-as-an-href-selector
    $("#save").click(function() {
    	// Gets active tab
        var index= ($( "#tabs" ).tabs( "option", "active"))+1;
        // ID of current tab
        var $tabID="#tabs-"+index;
        $('a[href="' + $tabID + '"]').css('background-color','#9ccf31'); // Changes background color to green
        $('a[href="' + $tabID + '"]').css('background-image','url(css/assets/checkbox_done.png)'); // Adds checkbox done
        $('a[href="' + $tabID + '"]').css('background-position','133px 23px'); // Position checkbox image
    }); // end save
    
    // Changes hint if you individual click a tab
    $(".ui-tabs-anchor").click(function() {
        var active = ($( "#tabs" ).tabs( "option", "active" ));
        hint(active-1);
    }); // end individual click
         
}); // end document ready function
            
// Function hint changes hint accordingly with current tab
// http://stackoverflow.com/questions/4995185/using-jquery-replacewith-to-replace-content-of-div-only-working-first-time
function hint(active){
    switch(active){
        case -1:
        	// Replaces with problem hint
            var problem = '<h3>Need Help Writing your<h3 class="bold"=">&nbsp;Problem?</h3><p>What questions are you trying to answer? Include any preliminary observations or background information about the subject.</p>';
            $( "div#hintContainer" ).empty();
            $( "div#hintContainer" ).append(problem);
            break;
        case 0:
        	// Replaces with hypothesis hint
            var hypothesis = '<h3>Need Help Writing your<h3 class="bold">&nbsp;Hypothesis?</h3><p>A hypothesis is an educated guess about how things work. Most of the time a hypothesis is written like this: "If _____[I do this]_____, then _____[this]_____ will happen." (Fill in the blanks with the appropriate information from your own experiment.)</p>';
            $( "div#hintContainer" ).empty();
            $( "div#hintContainer" ).append(hypothesis);
            break;
        case 1:
        	// Replaces with materials hint
            var materials = '<h3>Need Help Writing your<h3 class="bold">&nbsp;Materials?</h3><p>Make a list of all items used in the lab, and in what quantity.</p>';                    
            $( "div#hintContainer" ).empty();
            $( "div#hintContainer" ).append(materials);
            break;
        case 2:
        	// Replaces with procedure hint
            var procedure = '<h3>Need Help Writing your<h3 class="bold">&nbsp;Procedure?</h3><p>Use starting words such as obtain instead of get. Do not start each one with First, I went and got…etc. Remember another person may have to duplicate your lab, so it must be written in a clear, concise matter that will not cause error in their lab. Reproducibility is important for your experiment findings to be valid.</p>';
            $( "div#hintContainer" ).empty();
            $( "div#hintContainer" ).append(procedure);
            break;
        case 3:
        	// Replaces with result hint
            var result = '<h3>Need Help Writing your<h3 class="bold">&nbsp;Result?</h3><p>Look over your data, determine if your experiment supports or refutes your hypothesis. Do not be afraid of being proven wrong. The experiment is just as valid as one in which you are proven correct. Include a summary of the data - averages, highest, lowest..etc to help the reader understand your results.</p>';
            $( "div#hintContainer" ).empty();
            $( "div#hintContainer" ).append(result);
            break;
        case 4:
        	// Replaces with conclusion hint
            var conclusion = '<h3>Need Help Writing your<h3 class="bold">&nbsp;Conclusion?</h3><p>Explain why you accepted or rejected your hypothesis using data from the lab.Try not to copy your data here, you should summarize and reference key information. List one thing you learned and describe how it applies to a real-life situation. Discuss possible errors that could have occurred in the collection of the data.</p>';
            $( "div#hintContainer" ).empty();
            $( "div#hintContainer" ).append(conclusion);
            break;
    }
} 