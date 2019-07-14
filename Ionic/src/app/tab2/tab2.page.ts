import { Component } from '@angular/core';
import { MemeService } from '../meme.service';

@Component({
  selector: 'app-tab2',
  templateUrl: 'tab2.page.html',
  styleUrls: ['tab2.page.scss']
})
export class Tab2Page {

  constructor(public memeService: MemeService) {
  }

	getMemes():void{
		this.memeService.getMemes().subscribe(
			(res) => {
				console.log(res);
			}
		);
	}
		
  ngOnInit(){
    this.getMemes();
  }
}
