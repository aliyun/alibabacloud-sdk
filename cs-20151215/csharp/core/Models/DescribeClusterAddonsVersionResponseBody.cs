// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class DescribeClusterAddonsVersionResponseBody : TeaModel {
        [NameInMap("template")]
        [Validation(Required=true)]
        public string Template { get; set; }

        [NameInMap("next_version")]
        [Validation(Required=true)]
        public string NextVersion { get; set; }

        [NameInMap("can_upgrade")]
        [Validation(Required=true)]
        public bool? CanUpgrade { get; set; }

        [NameInMap("component_name")]
        [Validation(Required=true)]
        public string ComponentName { get; set; }

        [NameInMap("version")]
        [Validation(Required=true)]
        public string Version { get; set; }

        [NameInMap("changed")]
        [Validation(Required=true)]
        public string Changed { get; set; }

        [NameInMap("message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("required")]
        [Validation(Required=true)]
        public bool? Required { get; set; }

    }

}
