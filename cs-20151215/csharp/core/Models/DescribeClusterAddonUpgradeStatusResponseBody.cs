// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class DescribeClusterAddonUpgradeStatusResponseBody : TeaModel {
        [NameInMap("ComponentId")]
        [Validation(Required=true)]
        public DescribeClusterAddonUpgradeStatusResponseBodyComponentId ComponentId { get; set; }
        public class DescribeClusterAddonUpgradeStatusResponseBodyComponentId : TeaModel {
            [NameInMap("template")]
            [Validation(Required=true)]
            public string Template { get; set; }
            [NameInMap("can_upgrade")]
            [Validation(Required=true)]
            public bool? CanUpgrade { get; set; }
            [NameInMap("changed")]
            [Validation(Required=true)]
            public string Changed { get; set; }
            [NameInMap("addon_info")]
            [Validation(Required=true)]
            public DescribeClusterAddonUpgradeStatusResponseBodyComponentIdAddonInfo AddonInfo { get; set; }
            public class DescribeClusterAddonUpgradeStatusResponseBodyComponentIdAddonInfo : TeaModel {
                [NameInMap("component_name")]
                [Validation(Required=true)]
                public string ComponentName { get; set; }

                [NameInMap("ready_to_upgrade")]
                [Validation(Required=true)]
                public string ReadyToUpgrade { get; set; }

                [NameInMap("message")]
                [Validation(Required=true)]
                public string Message { get; set; }

                [NameInMap("version")]
                [Validation(Required=true)]
                public string Version { get; set; }

                [NameInMap("yaml")]
                [Validation(Required=true)]
                public string Yaml { get; set; }

            }
            [NameInMap("tasks")]
            [Validation(Required=true)]
            public DescribeClusterAddonUpgradeStatusResponseBodyComponentIdTasks Tasks { get; set; }
            public class DescribeClusterAddonUpgradeStatusResponseBodyComponentIdTasks : TeaModel {
                [NameInMap("finished_at")]
                [Validation(Required=true)]
                public string FinishedAt { get; set; }

                [NameInMap("master_url")]
                [Validation(Required=true)]
                public string MasterUrl { get; set; }

                [NameInMap("created_at")]
                [Validation(Required=true)]
                public string CreatedAt { get; set; }

                [NameInMap("status")]
                [Validation(Required=true)]
                public string Status { get; set; }

            }
        };

    }

}
