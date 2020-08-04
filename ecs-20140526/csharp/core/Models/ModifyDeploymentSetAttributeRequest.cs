// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ModifyDeploymentSetAttributeRequest : TeaModel {
        [NameInMap("DeploymentSetId")]
        [Validation(Required=true)]
        public string DeploymentSetId { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("DeploymentSetName")]
        [Validation(Required=false)]
        public string DeploymentSetName { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

    }

}
