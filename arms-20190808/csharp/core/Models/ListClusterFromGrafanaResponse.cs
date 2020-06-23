// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class ListClusterFromGrafanaResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PromClusterList")]
        [Validation(Required=true)]
        public List<ListClusterFromGrafanaResponsePromClusterList> PromClusterList { get; set; }
        public class ListClusterFromGrafanaResponsePromClusterList : TeaModel {
            [NameInMap("Id")]
            [Validation(Required=true)]
            public long Id { get; set; }

            [NameInMap("ClusterId")]
            [Validation(Required=true)]
            public string ClusterId { get; set; }

            [NameInMap("ClusterName")]
            [Validation(Required=true)]
            public string ClusterName { get; set; }

            [NameInMap("AgentStatus")]
            [Validation(Required=true)]
            public string AgentStatus { get; set; }

            [NameInMap("ClusterType")]
            [Validation(Required=true)]
            public string ClusterType { get; set; }

            [NameInMap("ControllerId")]
            [Validation(Required=true)]
            public string ControllerId { get; set; }

            [NameInMap("IsControllerInstalled")]
            [Validation(Required=true)]
            public bool? IsControllerInstalled { get; set; }

            [NameInMap("UserId")]
            [Validation(Required=true)]
            public string UserId { get; set; }

            [NameInMap("RegionId")]
            [Validation(Required=true)]
            public string RegionId { get; set; }

            [NameInMap("PluginsJsonArray")]
            [Validation(Required=true)]
            public string PluginsJsonArray { get; set; }

            [NameInMap("StateJson")]
            [Validation(Required=true)]
            public string StateJson { get; set; }

            [NameInMap("NodeNum")]
            [Validation(Required=true)]
            public int? NodeNum { get; set; }

            [NameInMap("CreateTime")]
            [Validation(Required=true)]
            public long CreateTime { get; set; }

            [NameInMap("UpdateTime")]
            [Validation(Required=true)]
            public long UpdateTime { get; set; }

            [NameInMap("LastHeartBeatTime")]
            [Validation(Required=true)]
            public long LastHeartBeatTime { get; set; }

            [NameInMap("InstallTime")]
            [Validation(Required=true)]
            public long InstallTime { get; set; }

            [NameInMap("Extra")]
            [Validation(Required=true)]
            public string Extra { get; set; }

            [NameInMap("Options")]
            [Validation(Required=true)]
            public string Options { get; set; }

        }

    }

}
