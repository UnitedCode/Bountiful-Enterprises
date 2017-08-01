declare var $;

$(document).ready(function() {
	$('.tab-content > table').DataTable();
	$('#years-table').DataTable();
});

class YearFileUpload
{
	fileInput: HTMLInputElement;
	fileUploadBtn: HTMLElement;
	fileUploadText: HTMLInputElement;

	public constructor()
	{
		this.fileInput = <HTMLInputElement> document.getElementById('file-input');
		this.fileUploadBtn = document.getElementById('file-upload-btn');
		this.fileUploadText = <HTMLInputElement> document.getElementById('file-upload-text');
		this.addEvents();
	}

	private addEvents() 
	{
		this.fileUploadText.addEventListener('click', (e) => {
			e.preventDefault();
			this.fileInput.click()
		});
		this.fileUploadBtn.addEventListener('click', () => {this.fileInput.click(); console.log('wtf')});
		this.fileInput.addEventListener('change', this.updateText.bind(this));
	}

	private updateText()
	{
		this.fileUploadText.value = this.extractFilename(this.fileInput.value);
	}

	private extractFilename(fullPath: string): string{
		let startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
		let filename = fullPath.substring(startIndex);
		if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
				filename = filename.substring(1);
		}

		return filename;
	}
}

new YearFileUpload();