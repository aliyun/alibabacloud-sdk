// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetEditingProjectMaterialsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("MaterialList")]
        [Validation(Required=true)]
        public GetEditingProjectMaterialsResponseMaterialList MaterialList { get; set; }
        public class GetEditingProjectMaterialsResponseMaterialList : TeaModel {
            [NameInMap("Material")]
            [Validation(Required=true)]
            public List<GetEditingProjectMaterialsResponseMaterialListMaterial> Material { get; set; }
            public class GetEditingProjectMaterialsResponseMaterialListMaterial : TeaModel {
                    public string MaterialId { get; set; }
                    public string Title { get; set; }
                    public string Tags { get; set; }
                    public string Status { get; set; }
                    public long Size { get; set; }
                    public float? Duration { get; set; }
                    public string Description { get; set; }
                    public string CreationTime { get; set; }
                    public string ModifiedTime { get; set; }
                    public string CoverURL { get; set; }
                    public int? CateId { get; set; }
                    public string CateName { get; set; }
                    public string Source { get; set; }
                    public string SpriteConfig { get; set; }
                    public GetEditingProjectMaterialsResponseMaterialListMaterialSnapshots Snapshots { get; set; }
                    public class GetEditingProjectMaterialsResponseMaterialListMaterialSnapshots : TeaModel {
                        [NameInMap("Snapshot")]
                        [Validation(Required=true)]
                        public List<string> Snapshot { get; set; }

                    }
                    public GetEditingProjectMaterialsResponseMaterialListMaterialSprites Sprites { get; set; }
                    public class GetEditingProjectMaterialsResponseMaterialListMaterialSprites : TeaModel {
                        [NameInMap("Sprite")]
                        [Validation(Required=true)]
                        public List<string> Sprite { get; set; }

                    }
            }
        };

    }

}
