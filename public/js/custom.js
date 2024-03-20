
manageTop('.topbar', '.card-sticky', 0);

const detailMutasi = document.querySelector('#detail-mutasi');
if ( detailMutasi ) { manageTop('.topbar', '.card-sticky', 24) }

function manageTop(a, b, c) {
	const topbar = document.querySelector(a);
	const cardSticky = document.querySelectorAll(b);
	let heightPure = topbar.offsetHeight,
		heightPlus = c,
		pointTop = heightPure + heightPlus;
	cardSticky.forEach(ele => {
		ele.style.top = pointTop+"px";
	});
}