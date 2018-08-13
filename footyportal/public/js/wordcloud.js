function WordCloud(options) {
  var margin = {top: 70, right: 100, bottom: 0, left: 100},
           w = 500 - margin.left - margin.right,
           h = 400 - margin.top - margin.bottom;

  // create the svg
  var svg = d3.select(options.container).append("svg")
              .attr('height', h + margin.top + margin.bottom)
              .attr('width', w + margin.left + margin.right)

  // set the ranges for the scales
  var xScale = d3.scaleLinear().range([10, 20]);

  var focus = svg.append('g')
                 .attr("transform", "translate(" + [w/2, h/2+margin.top] + ")")

  var colorMap = ['red', '#a38b07'];

  // seeded random number generator
  var arng = new alea('hello.');

  var data;
  d3.json(options.data, function(error, d) {
    if (error) throw error;
    data = d;
    var word_entries = d3.entries(data['count']);
    xScale.domain(d3.extent(word_entries, function(d) {return d.value;}));

    makeCloud();

    function makeCloud() {
      d3.layout.cloud().size([w, h])
               .timeInterval(20)
               .words(word_entries)
               .fontSize(function(d) { return xScale(+d.value); })
               .text(function(d) { return d.key; })
               .font("Impact")
               .random(arng)
               .on("end", function(output) {
                 // sometimes the word cloud can't fit all the words- then redraw
                 // https://github.com/jasondavies/d3-cloud/issues/36
                 if (word_entries.length !== output.length) {
                   console.log("not all words included- recreating");
                   makeCloud();
                   return undefined;
                 } else { draw(output); }
               })
               .start();
    }

    d3.layout.cloud().stop();

  });

  function draw(words) {
    focus.selectAll("text")
         .data(words)
         .enter().append("text")
         .style("font-size", function(d) { return xScale(d.value) + "px"; })
         .style("font-family", "Impact")
         .style("fill", function(d, i) { return colorMap[~~(arng() *2)]; })
         .attr("text-anchor", "middle")
         .attr("transform", function(d) {
           return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
         })
         .text(function(d) { return d.key; })
     }
}