import React, { Component } from 'react';

class Home extends Component {
	constructor (props) {
		super (props)
		this.updateState = this.updateState.bind(this)
	}
	updateState(id, url) {
		//親コンポーネントを更新
		this.props.updateState(id, url);
	}

	shouldComponentUpdate() {
		
	}

	render() {
		const params = new URLSearchParams(this.props.location.search);
		const id = params.get('id');
		const url = params.get('url');
		// 子コンポーネントを更新
		this.updateState(id, url);
    return (
		<div>
		<tr><td>利用する機能を選択してください。</td></tr>
		</div>
	);
  }
}

export default Home;