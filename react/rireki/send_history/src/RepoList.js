import React, { Component } from 'react';
import { Link } from 'react-router-dom';

class RepoList extends Component {
  constructor(props) {
    super(props);
    this.state = {
      repositories: [{name : "1"}, {name : "2"}, {name : "3"}]
    };
  }

  render() {
    const repos = this.state.repositories.map(repo => (
      <li key={repo.id}>
        <Link to={`/repos/details/${repo.name}`}>{repo.name}</Link>
      </li>
    ));
    return (
      <div>
        <h3>入金履歴</h3>
        <ul>
          {repos}
        </ul>
      </div>
    );
  }
}

export default RepoList;