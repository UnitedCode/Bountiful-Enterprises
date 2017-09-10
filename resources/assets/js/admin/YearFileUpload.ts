import {qs, $on} from "../helpers";

export class YearFileUpload
{
    fileInput: HTMLInputElement;
    fileUploadBtn: HTMLElement;
    fileUploadText: HTMLInputElement;

    public constructor()
    {
        this.fileInput = <HTMLInputElement>qs('#file-input');
        this.fileUploadBtn = <HTMLElement>qs('#file-upload-btn');
        this.fileUploadText = <HTMLInputElement>qs('#file-upload-text');
        this.addEvents();
    }

    private addEvents()
    {
        $on(this.fileUploadText, 'click', (e) => {
            e.preventDefault();
            this.fileInput.click();
        });
        $on(this.fileUploadBtn, 'click', () => {this.fileInput.click()});
        $on(this.fileInput, 'change', this.updateText.bind(this));
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