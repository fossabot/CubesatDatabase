import { Injectable } from '@angular/core';
import { Http, Response } from '@angular/http';
import { Headers, RequestOptions } from '@angular/http';
import {User} from './../models/user';

import {Observable}     from 'rxjs/Rx';


@Injectable()
export class UserService {
	constructor(private http: Http) {}

	private _user_url = 'api/v1';

	register(payload: any ) : Observable<User> {
		
		let headers = new Headers({ 'Content-Type': 'application/json' });
    	let options = new RequestOptions({ headers: headers });
    	console.log(payload);
    	return this.http.post(this._user_url + "/register", payload, options)
               // .toPromise()
               .map(this.extractData)
               .catch(this.handleError);;
               //.catch(this.handleError);
               //.then(this.extractData)
               //.catch(this.handleError);
	}

	// login(name: string, password: string) : Observable<User>{
		
	// }

	private extractData(res: Response) {
		let body = res.json();
		return body.data || { };
	}

	private handleError (error: Response ) {
	  let body = error.json();
	  return Observable.throw(body || { });
	}

	isUserLoggedIn()
	{
		return true;
	}
}

