// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class ModifyRouteTableAttributesRequest : TeaModel {
        [NameInMap("RouteTableId")]
        [Validation(Required=true)]
        public string RouteTableId { get; set; }

        [NameInMap("RouteTableName")]
        [Validation(Required=false)]
        public string RouteTableName { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

    }

}
