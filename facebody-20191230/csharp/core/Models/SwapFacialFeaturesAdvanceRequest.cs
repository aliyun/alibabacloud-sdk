// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Facebody20191230.Models
{
    public class SwapFacialFeaturesAdvanceRequest : TeaModel {
        [NameInMap("SourceImageURLObject")]
        [Validation(Required=true)]
        public Stream SourceImageURLObject { get; set; }

        [NameInMap("EditPart")]
        [Validation(Required=true)]
        public string EditPart { get; set; }

        [NameInMap("TargetImageURL")]
        [Validation(Required=true)]
        public string TargetImageURL { get; set; }

    }

}
