export class TextFieldVM {
	inputField: HTMLInputElement;

	valueChanged(newValue: string): void {
		if (!newValue) {
			console.log('value is empty');
		} else {
			console.log('value: ', newValue);
		}
	}

	public handlePasteAction = (event: ClipboardEvent): boolean => {
		return true;
	};

	public handleCopyAction = (event: ClipboardEvent): boolean => {
		return true;
	};
}
