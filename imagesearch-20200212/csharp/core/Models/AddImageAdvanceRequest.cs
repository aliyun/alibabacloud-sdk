// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ImageSearch20200212.Models
{
    public class AddImageAdvanceRequest : TeaModel {
        [NameInMap("PicContentObject")]
        [Validation(Required=true)]
        public Stream PicContentObject { get; set; }

        [NameInMap("InstanceName")]
        [Validation(Required=true)]
        public string InstanceName { get; set; }

        [NameInMap("CategoryId")]
        [Validation(Required=false)]
        public int? CategoryId { get; set; }

        [NameInMap("ProductId")]
        [Validation(Required=true)]
        public string ProductId { get; set; }

        [NameInMap("PicName")]
        [Validation(Required=true)]
        public string PicName { get; set; }

        [NameInMap("Crop")]
        [Validation(Required=false)]
        public bool? Crop { get; set; }

        [NameInMap("Region")]
        [Validation(Required=false)]
        public string Region { get; set; }

        [NameInMap("CustomContent")]
        [Validation(Required=false)]
        public string CustomContent { get; set; }

        [NameInMap("IntAttr")]
        [Validation(Required=false)]
        public int? IntAttr { get; set; }

        [NameInMap("StrAttr")]
        [Validation(Required=false)]
        public string StrAttr { get; set; }

    }

}
