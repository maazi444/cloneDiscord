// const detailRow1 = document.querySelector('.detailRow1');
const detailRows = document.querySelectorAll('.fadein');
// const fader=document.querySelectorAll(".fade-in");
const options={
	root:null,
	threshold:0,
	rootMargin: "-200px"
};
const observer = new IntersectionObserver(function(enteries,observer){
	enteries.forEach(entry=>{
		if(!entry.isIntersecting){
			return;
		}
		console.log(entry.target);
		entry.target.classList.toggle("appear");
		observer.unobserve(entry.target);
	});
},options);
// observer.observe(detailRow1);
detailRows.forEach(detailRows =>{
	observer.observe(detailRows);
});