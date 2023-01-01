<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="text-center mt-5 pb-5 border-bottom border-top pt-4">
			<span class="h6 mb-2 ">Bagikan ke- </span>
			<div class="btn-list mt-2">
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>"
					onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
					target="_blank" title="Share on Facebook" class="btn btn-icon btn-facebook"><i
						class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/share?url=<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>"
					onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
					target="_blank" class="btn btn-icon btn-twitter"><i class="fa fa-twitter"></i></a>
				<a href="https://api.whatsapp.com/send?text=<?= htmlspecialchars($single_artikel["judul"]);?>%0A<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>"
					onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
					target="_blank" class="btn btn-icon btn-success"><i class="fa fa-whatsapp"></i></a>
			</div>
</div>