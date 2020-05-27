// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class ListChangeSetsRequest : TeaModel {
        [NameInMap("StackId")]
        [Validation(Required=true)]
        public string StackId { get; set; }

        [NameInMap("Status")]
        [Validation(Required=false)]
        public List<string> Status { get; set; }

        [NameInMap("ChangeSetName")]
        [Validation(Required=false)]
        public List<string> ChangeSetName { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public long PageSize { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public long PageNumber { get; set; }

        [NameInMap("ExecutionStatus")]
        [Validation(Required=false)]
        public List<string> ExecutionStatus { get; set; }

        [NameInMap("ChangeSetId")]
        [Validation(Required=false)]
        public string ChangeSetId { get; set; }

    }

}
