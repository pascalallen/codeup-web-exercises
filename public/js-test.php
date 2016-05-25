<!doctype html>
<html>
<head>
	<title>JS test</title>
</head>
<body>
	<div id="myDiv"></div>

	<script src="/js/jquery-2.1.4.min.js"></script>

	<script type="text/javascript">

		/**
		 * Write a solution in any language that:
		 *
		 * Takes in an array of two objects, flattens the currArray, and prints an HTML Table of the values.
		 * The HTML table has a column header which is a superset of all keys in all the objects.  The arrays are arbitrarily deep.
		 * Any values that have changed (ie field value changed or is a new key altogether) should be bolded.  You can use any NPM modules you  * want to solve the solution.  
		 *
		 * @param prevArray is an array of objects
		 * @param currArray is an array of objects
		 * @return a string with HTML markup in it, should return null if error occurs.
		 */

		var one = [ {_id:1, someKey: "RINGING", meta: { subKey1: 1234, subKey2: 52 } } ];
		var two = [ {_id:1, someKey: "HANGUP",  meta: { subKey1: 1234, subKey2: 56 } },
			{_id:2, someKey: "RINGING", meta: { subKey1: 5678, subKey2: 207, subKey3: 52 } } ];

		function arrayDiffToHtmlTable( prevArray, currArray) {

			function arrayUnique(array) {
			    var a = array.concat();
			    for(var i=0; i<a.length; ++i) {
			        for(var j=i+1; j<a.length; ++j) {
			            if(a[i] === a[j])
			                a.splice(j--, 1);
			        }
			    }

			    return a;
			}

			var merged = arrayUnique(prevArray.concat(currArray));

			var merged = [].concat.apply([], prevArray);
			merged	+= currArray;

			var $table = $( "<table></table>" );

			for ( var i = 0; i < merged.length; i++ ) {
			    var arr = merged[i];
			    var $line = $( "<tr></tr>" );
			    $line.append( $( "<td></td>" ) ).html( arr._id  );
			    $line.append( $( "<td></td>" ) ).html( arr.someKey  );
			    $line.append( $( "<td></td>" ) ).html( arr.meta.subKey1  );
			    $line.append( $( "<td></td>" ) ).html( arr.meta.subKey2  );
			    $line.append( $( "<td></td>" ) ).html( arr.meta.subKey3  );
			    $table.append( $line );
			}

			$table.appendTo( document.body );
			$table.appendTo( $( "#myDiv" ) );
		    // Note: you cannot depend solely on array index for comparison.
		    // The currArray could have more or potentially even be in a different order.
		    // However, you can assume that each item in the arrays will have an "_id" parameter
		    //
		    // Example, Given the following data set:
		    //
		    //        var prevArray = [ {_id:1, someKey: "RINGING", meta: { subKey1: 1234, subKey2: 52 } } ];
		    //        var currArray = [ {_id:1, someKey: "HANGUP",  meta: { subKey1: 1234, subKey2: 56 } },
		    //            {_id:2, someKey: "RINGING", meta: { subKey1: 5678, subKey2: 207, subKey3: 52 } } ];
		    //
		    //        console.log( arrayDiffToHtmlTable( prevArray, currArray));
		    //
		    //  OUTPUT (Note this is a text representation... output should be an HTML table):
		    //
		    //          _id               someKey          meta_subKey1        meta_subKey2        meta_subKey3
		    //            1              **HANGUP**             1234               **56**
		    //          **2**            **RINGING**          **5678**             **207**             **52**
		    //
		    //  ** implies this field should be bold or highlighted.
		    //  !!! analyze the example carefully as it demonstrates expected cases that need to be handled. !!!
		    //
		}

		arrayDiffToHtmlTable(one, two);
	</script>


</body>
</html>